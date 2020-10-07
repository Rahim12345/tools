<?php
// 1 il evvel 20 saat evvel kimi
{{\Carbon\Carbon::parse($article->created_at)->diffForHumans() }}