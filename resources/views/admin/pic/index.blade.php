
@extends("muban.admin")

@section('main')



<!-- 内容 -->
			<div class="col-md-10">
				
				<ol class="breadcrumb">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
					<li><a href="#">图片管理</a></li>
					<li class="active">图片列表</li>

					<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
				</ol>

				<!-- 面版 -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
						<a href="{{ asset('admin/pic/create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加图片</a>
						
						<p class="pull-right tots" >共有 <span id="tot">{{count($data)}}</span> 条数据</p>
						<form action="" class="form-inline pull-right">
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="请输入你要搜索的内容" id="">
							</div>
							
							<input type="submit" value="搜索" class="btn btn-success">
						</form>


					</div>
					<table class="table-bordered table table-hover">
						<th><input type="checkbox" name="" id=""></th>
						<th>ID</th>
						<th>TITLE</th>
						<th>IMG</th>
						<th>操作</th>
						@foreach($data as $value)
						<tr>
							<td><input type="checkbox" name="" id=""></td>
							<td>{{$value->id}}</td>
							<td>{{$value->title}}</td>
							<td><img width="200px" src="/Uploads/Goods/{{$value->img}}" alt=""></td>
			
							<td><a href="/admin/pic/1/edit" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="del(this,{{$value->id}})" class="glyphicon glyphicon-trash"></a></td>
						</tr>
						@endforeach

					</table>
					<!-- 分页效果 -->
					<div class="panel-footer">
						<nav style="text-align:center;">
							<ul class="pagination">
								<li><a href="#">&laquo;</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</nav>

					</div>
				</div>
			</div>
			<script>
			
				//obj,id 接受参数
				function del(obj,id){
					
		
				
				
					//alert(id);
					//$.post(请求地址,传递参数,响应请求)
					//data可以随便命名 主要接收ajax返回的数据
					$.post('/admin/pic/'+id,{'id':id,'_method':'delete','_token':'{{csrf_token()}}'},
						function(data){
							//判断接收的数据如果1成功  0失败
							
							if(data){
								//移除对应删除的数据
								$(obj).parent().parent().remove();
								//获取总数据条数
								var tot=Number($("#tot").html());
								//修改总数据条数
								$("#tot").html(--tot);
								
							}else{
								alert('删除失败');
							}
						}
					)
					
					
				
			
					
				}
			
			</script>
@endsection


