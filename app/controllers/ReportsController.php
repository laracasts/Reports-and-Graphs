<?php

class ReportsController extends BaseController {

    public function daily()
    {
        // You'll probably want to limit this to the current month
        // or something.
        $daily = DailyReports::all();

        return View::make('admin.reports.daily')
            ->with([
                'dates' => $daily->lists('date'),
                'totals' => $daily->lists('amount')
            ]);
    }

}
