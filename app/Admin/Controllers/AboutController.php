<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Form;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('关于我')
            ->body(function (Row $row) {
                $row->column(12, Card::make($this->form()));
            });
    }

    public function store(Request $request)
    {
        file_put_contents(resource_path('docs/1.0/about.md'), $request->input('content'));

        return $this->form()->success('更新成功', '/about');
    }

    protected function form()
    {
        $form = Form::make();

        $content = file_get_contents(resource_path('docs/1.0/about.md'));
        $form->markdown('content', '')->default($content);

        $form->disableResetButton();

        return $form;
    }
}
