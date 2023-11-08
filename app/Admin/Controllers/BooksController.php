<?php

namespace App\Admin\Controllers;

use App\Models\Books;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BooksController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Books';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Books());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('author', __('Author'));
        $grid->column('publication', __('Publication'));
        $grid->column('price', __('Price'));
        $grid->column('discount', __('Discount'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('code', __('Code'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Books::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('author', __('Author'));
        $show->field('publication', __('Publication'));
        $show->field('price', __('Price'));
        $show->field('discount', __('Discount'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('code', __('Code'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Books());

        $form->text('title', __('Title'));
        $form->text('author', __('Author'));
        $form->text('publication', __('Publication'));
        $form->number('price', __('Price'));
        $form->number('discount', __('Discount'));
        $form->text('code', __('Code'));

        return $form;
    }
}
