<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class MessageController extends Controller
{
    public function feedback(Request $request) {
        $this->validate($request, [
            'captcha' => 'required|in:5',
//            'name' => 'required|min:2|max:100',
            'email' => 'email',
            'text' => 'required|min:3|max:510',
        ]);
        $data = $request->except('_token');
        $feedback = new Feedback();
        $feedback->fill($data);
        $feedback->save();
        return redirect()->back()->with('messageSent', true);
    }

    public function readFeedback($id){
        $item = Feedback::find($id);
        $item->status = 1;
        $item->save();
        return view('admin.message', [
            'item' => $item
        ])->withTitle('Read Message');
    }

    public function messageDel(Feedback $item) {
        $item->delete();
        return redirect('admin/feedback');
    }
}
