<?php

$ideaCount = DB::table('ideas')
            ->where('email_verify','=',1)
            ->where('is_active','=','1')
            ->select(DB::raw('DATE(updated_at) as date'), DB::raw('count(*) as idea_count'))
            ->groupBy('date')
            ->orderByDesc('updated_at')
            ->get();