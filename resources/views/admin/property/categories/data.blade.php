@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-md-12 col-xs-12 alert-warning alert-dismissable">        
        <h5 style="color:navy;font-size:14px;padding-top:6px;">
            <a href="/admin"> <i class="fa fa-home"></i> Home </a> 
            <i class="fa fa-angle-right"></i> 
            Data Categories
        </h5>          
    </div>
</div>
<br>
<div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">&nbsp;</h4>
                <button class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <br>
            <div class="modal-body">
                <form class="eventInsForm" method="post" target="_self" name="formku" 
                      id="formku" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <label for="name" class="col-form-label">Category Name <font color="#f00">*</font></label>
                        </div>                                
                        <div class="col-md-8 col-xs-8">
                            <input type="text" id="name" name="name" 
                                class="form-control myline" style="margin-bottom:5px" maxlength="50">
                            <input type="hidden" name="category_id" id="category_id">
                            <div class="invalid-feedback nama-ada inv-nama">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">                        
                <button type="button" class="btn btn-primary" onClick="simpandata();"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    @if($errors->any())
                        <div class="row">
                            <div class="col-12 alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button class="close" onclick="$('.alert').hide()"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                    @endif
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12 alert alert-success">
                                {{ session('status') }}
                                {{-- <button class="close" onclick="$('.alert').hide()"><i class="fa fa-close"></i></button> --}}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="x_title">
                <h2>Property<small>Categories</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li>
                    	<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <a class="btn btn-primary btn-sm" style="color: white" onclick="newData()"><i class="fa fa-plus"></i> Tambah</a>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                        	<th>No</th>
                            <th>Nama Categori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($category as $c)
                        <tr>
                            <td style="width: 5%;">{{ $no++ }}.</td>
                            <td>{{ ucwords($c->name) }}</td>
                            <td style="width: 15%;">
                                <a onclick="editData({{ $c->category_id }})" class="btn btn-info btn-sm" style="color: white;"><i class="fa fa-pencil"></i> Edit</a>
                                <form action="/category_delete" method="POST" class="d-inline">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="category_id" value="<?= $c->category_id; ?>">
                                    <button class="btn btn-danger btn-sm tombol-hapus" onclick="return confirm('apakah anda yakin, ingin menghapus data ini?')" style="margin-bottom:4px;" type="submit">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
var dsState;

$(function() {
        window.setTimeout(function() {
            $('.alert-success').hide(300);
        }, 5000);
    });

$(function() {
    window.setTimeout(function() {
        $('.invalid-feedback').hide(300);
    }, 3000);
});

function newData(){
    $('#category_id').val('');
    $('#name').val('');
    dsState = "Input";
    
    $("#myModal").find('.modal-title').text('Add Category');
    $("#myModal").modal('show',{backdrop: 'true'}); 
}

function simpandata(){
    if($.trim($("#name").val()) == ""){
        $(".inv-nama").html("Categories tidak boleh kosong!");  
        $('#name').addClass('is-invalid');
            window.setTimeout(function() {
                $('.inv-nama').hide(300);
            }, 3000);   
    } else{       
        //$('#btnSave').attr("disabled", true);
        if(dsState=="Input"){
            $.ajax({
                type:"POST",
                url:"{{ route('categories.cek_category') }}",
                data:{
                    data : $("#name").val()
                },
                success:function(result){
                    if(result=="duplicate"){
                        // console.log(result);
                        $('.nama-ada').html("Category sudah ada!");
                        $('.nama-ada').show();
                    }else{
                    // console.log(result);
                        $('#message').html("");
                        $('.nama-ada').hide();
                        $('#formku').attr("action", "{{ route('categories.add_category') }}");
                        $('#formku').submit();                    
                    }
                }
            });
        }else{
            $('#formku').attr("action", "{{ route('categories.edit_category') }}");
            $('#formku').submit(); 
        }
    };
};

function editData(category_id){
    dsState = "Edit";
    $.ajax({
        type: "POST",
        url: "{{ route('categories.get_category') }}",
        dataType: 'json',
        data : {
            category_id : category_id
            },
        success: function (result){
            $('#category_id').val(result['category_id']);
            $('#name').val(result['name']);

            $("#myModal").find('.modal-title').text('Edit Category');
            $("#myModal").modal('show',{
                backdrop: 'true'
                });           
        }
    });
}
</script>
@endsection