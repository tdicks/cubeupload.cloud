<?php

namespace App\Admin\Controllers;

use App\Announcement;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AnnouncementController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Announcements');
            $content->description('Index');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Announcements');
            $content->description('Edit');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('Announcements');
            $content->description('Create');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Announcement::class, function (Grid $grid) {

            $grid->column('title');
            $grid->enabled()->display(function($enabled)
            {
                return $enabled ? '<span class="label label-success">Yes</span>' : '<span class="label label-danger">No</span>';
            });

            $grid->dismissable()->display(function($enabled)
            {
                return $enabled ? '<span class="label label-success">Yes</span>' : '<span class="label label-danger">No</span>';
            });


        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Announcement::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title', 'Title');
            $form->textarea('text', 'Text')->placeholder('Announcement content, HTML supported!');

            $form->radio('enabled')->options([0 => 'No', 1 => 'Yes']);
            $form->radio('dismissable')->options([0 => 'No', 1 => 'Yes']);

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
