<?php

public $ideaCount;
    public $voteCount;
    public $feedbackCount;
    public function index()
    {
        for ($i=6; $i>=0; $i--)
        {
            $dates[] = Carbon::today()->subDays($i)->format('M j');

            $this->ideaCount[] = DB::table('ideas')
                ->where('email_verify','=',1)
                ->where('is_active','=','1')
                ->whereDate('updated_at','=',Carbon::today()->subDays($i)->format('Y-m-d'))
                ->select(DB::raw('DATE(updated_at) as date'), DB::raw('count(*) as idea_count'))
                ->groupBy('date')
                ->get()->pluck('idea_count');

            $this->voteCount[] = DB::table('votes')
                ->where('email_verify','=',1)
                ->whereDate('updated_at','=',Carbon::today()->subDays($i)->format('Y-m-d'))
                ->select(DB::raw('DATE(updated_at) as date'), DB::raw('sum(vote) as vote_sum'))
                ->groupBy('date')
                ->get()->pluck('vote_sum');

            $this->feedbackCount[] = DB::table('feedbacks')
                ->where('email_verify','=',1)
                ->where('is_active','=','1')
                ->whereDate('updated_at','=',Carbon::today()->subDays($i)->format('Y-m-d'))
                ->select(DB::raw('DATE(updated_at) as date'), DB::raw('count(*) as feedback_count'))
                ->groupBy('date')
                ->get()->pluck('feedback_count');
        }

        $chart = new StatisticChart();
        $chart->labels($dates);
        $chart->dataset('Idea', 'line', $this->ideaCount)->backgroundcolor('blue')->color('blue');
        $chart->dataset('Vote count', 'line', $this->voteCount)->backgroundcolor('red')->color('red');
        $chart->dataset('Vote count', 'line', $this->feedbackCount)->backgroundcolor('green')->color('green');

        return view('backend.pages.dashboard',compact('chart'));
    }