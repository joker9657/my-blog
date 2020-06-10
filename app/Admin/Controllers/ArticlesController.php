<?php

namespace App\Admin\Controllers;

use App\Article;
use App\Category;
use App\Tag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ArticlesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '博文';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->column('id', 'ID');
        $grid->column('title', '标题');
        $grid->column('category.name', '分类');
        $grid->column('slug', __('Slug'));
        $grid->column('clicks', '点击数');
        $grid->column('sorting', '排序');
        $grid->column('created_at', __('Created at'))->date('Y-m-d');
        $grid->column('updated_at', __('Updated at'))->date('Y-m-d');
        $grid->model()->orderBy('id', 'desc');

        $grid->actions(function ($actions) {
            // 去掉查看
            $actions->disableView();
        });
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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('category_id', __('Category id'));
        $show->field('introduction', __('Introduction'));
        $show->field('slug', __('Slug'));
        $show->field('clicks', __('Clicks'));
        $show->field('sorting', __('Sorting'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article());

        $form->text('title', '标题');
        $form->simplemde('content', '内容');
        $form->select('category_id', '分类')->options(function () {
            $categories = Category::pluck('name', 'id');
            return $categories;
        })->config('placeholder', '请选择');
        $form->text('introduction', '简介');
        $form->text('slug', __('Slug'));
        $form->number('sorting', __('Sorting'))->default(0);
        $form->multipleSelect('tags')->options(Tag::all()->pluck('name', 'id'));

        return $form;
    }
}
