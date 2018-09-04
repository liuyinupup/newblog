@extends('layouts.default_admin')
@section('css/js')
    <script src="org/editormd/editormd.min.js"></script>
    <link rel="stylesheet" href="org/editormd/css/editormd.css" />
@endsection
@section('content')
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">文章标题</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">文章类别</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">文章排序</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">文章内容</label>
            <div id="layout">
                <div id="test-editormd">
                    <textarea style="display:none;"></textarea>
                </div>
            </div>
            <script type="text/javascript">
                var testEditor;
                $(function() {
                    testEditor = editormd("test-editormd", {
                        width : "90%",
                        height : 640,
                        syncScrolling : "single",
                        path : "org/editormd/lib/"
                    });})
            </script>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
