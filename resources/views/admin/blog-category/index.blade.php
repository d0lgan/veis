@extends('layouts.admin.app')
@section('content')
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Блог</h1>
            <blog-component :cate="{{ json_encode($categories) }}" :artic="{{ json_encode($articles) }}"></blog-component>
        </div>
    </div>


    {{--<div class="modal fade" id="blogCategory" tabindex="-1" role="dialog" aria-labelledby="blogCategoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogCategoryLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="title">Название категории</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="title">Изображение</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="blogArticle" tabindex="-1" role="dialog" aria-labelledby="blogArticleLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogArticleLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="title">Название категории</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="desc">Краткое описание</label>
                        <textarea name="" id="desc" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="long_desc">Описание</label>
                        <textarea name="" id="desc" cols="30" rows="13" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="title">Изображение</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <h1>Блог</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div type="button" data-toggle="modal" data-target="#blogCategory" class="btn btn-primary" >Добавить категорию</div>
                        <div class="col-md-12 mt-4 border border-secondary p-3" style="height: 300px;">
                            <div class="col-md-12 mb-4 border border-secondary" style="background: darkgray;">
                                <h4>Новости</h4>
                            </div>
                            <div class="col-md-12 border border-secondary" style="background: darkgray;">
                                <h4>Статьи</h4>
                            </div>
                        </div>
                    </div>


                    <div class="table-responsive col-md-8">
                        <div type="button" class="btn mb-4 btn-primary" data-toggle="modal" data-target="#blogArticle">Добавить новость</div>
                        <table class="table table-striped table-hover table-bordered datatable">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Категория</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Заголовок новости 1</td>
                                <td>Новости</td>
                                <td><a class="btn btn-primary" href="/admin-blog/1/edit">Редактировать</a></td>
                                <td><input class="btn btn-sm btn-danger" type="submit" value="Удалить"/></td>
                            </tr>
                            <tr>
                                <td>Заголовок новости 2</td>
                                <td>Новости</td>
                                <td><a class="btn btn-primary" href="/admin-blog/1/edit">Редактировать</a></td>
                                <td><input class="btn btn-sm btn-danger" type="submit" value="Удалить"/></td>
                            </tr>
                            <tr>
                                <td>Заголовок новости 3</td>
                                <td>Новости</td>
                                <td><a class="btn btn-primary" href="/admin-blog/1/edit">Редактировать</a></td>
                                <td><input class="btn btn-sm btn-danger" type="submit" value="Удалить"/></td>
                            </tr>
                            <tr>
                                <td>Заголовок новости 4</td>
                                <td>Новости</td>
                                <td><a class="btn btn-primary" href="/admin-blog/1/edit">Редактировать</a></td>
                                <td><input class="btn btn-sm btn-danger" type="submit" value="Удалить"/></td>
                            </tr>
                            <tr>
                                <td>Заголовок новости 5</td>
                                <td>Новости</td>
                                <td><a class="btn btn-primary" href="/admin-blog/1/edit">Редактировать</a></td>
                                <td><input class="btn btn-sm btn-danger" type="submit" value="Удалить"/></td>
                            </tr>
                            --}}{{--@foreach($slides as $slide)
                                <tr>
                                    <td>{{ $slide->title }}</td>
                                    <td>{{ $slide->sort }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('admin-slider.edit', $slide->id) }}">Редактировать</a>

                                    </td>
                                    <td>
                                        <form method="post" action="{{route('admin-slider.destroy',$slide->id)}}" role="form">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input class="btn btn-sm btn-danger" type="submit" value="Удалить"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach--}}{{--
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection

