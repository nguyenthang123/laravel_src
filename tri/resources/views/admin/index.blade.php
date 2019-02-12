
@include('admin.head')

	    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
				@include('admin.sitebar')
		   </ul>

	   </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row s_quan_tri">
                    <div class="col-lg-12" style="padding-top: 40px;padding-bottom: 30px;">
                        <h1>Quản trị Website</h1>
                
                    </div>
					<div class="col-sm-2">
					<a href="/admin/product/create">
						<div class="kaka">
						
							<img src="/public/admin/images/icon-add-product.png" /><br/>
							Thêm Bài viết
						
						</div></a>
					</div>
					<div class="col-sm-2">
					<a href="/admin/product">
						<div class="kaka">
							<img src="/public/admin/images/icon-quan-ly-sam-pham.png" /><br/>
							Quản lý Bài viết
						</div>
					</a>	
					</div>
					<div class="col-sm-2">
					<a href="/admin/cat">
						<div class="kaka">
						
							<img src="/public/admin/images/icon-quan-ly-danh-muc.png" /><br/>
							Danh mục
						</div>
					</a>	
					</div>
					<div class="col-sm-2">
					<a href="/admin/menus">
						<div class="kaka">
							<img src="/public/admin/images/icon-menu.png" /><br/>
							Menu
						</div>
					</a>	
					</div>	
					<div class="col-sm-2 ">
					<a href="/admin/admin">
						<div class="kaka">
							<img src="/public/admin/images/icon-user.png" /><br/>
							Admin
						</div>
					</a>	
					</div>	
					<div class="col-sm-2 ">
					 <a href="#" onclick="BrowseServer();" >
						<div class="kaka">
							<img src="/public/admin/images/icon-media.png" /><br/>
							Quản lý ảnh
						</div>
					</a>	
					</div>						
				</div>				
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

@include('admin.footer')