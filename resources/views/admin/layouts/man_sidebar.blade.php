<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth('admin')->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
        <!-- search form -->
        <form action="/admin/article/search" method="post" class="sidebar-form">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="title" class="form-control" autocomplete="off" placeholder="输入文档标题...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">主管理界面</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-file-text"></i> <span>核心操作管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/category')class="active"@endif><a href="/admin/category" ><i class="fa fa-circle-o"></i> 网站栏目管理</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article')class="active" @endif><a href="/admin/article"><i class="fa fa-circle-o"></i> 普通文档列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/ownership')class="active" @endif><a href="/admin/article/ownership"><i class="fa fa-circle-o"></i> 我发布的文档</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/pendingaudit')class="active" @endif><a href="/admin/article/pendingaudit"><i class="fa fa-circle-o"></i> 等待审核文档</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/pedingpublished')class="active" @endif><a href="/admin/article/pedingpublished"><i class="fa fa-circle-o"></i> 待发布的文档</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/brands')class="active" @endif><a href="/admin/article/brands"><i class="fa fa-circle-o"></i> 品牌文档列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/brandarticle/ownership')class="active" @endif><a href="/admin/brandarticle/ownership"><i class="fa fa-circle-o"></i> 我发布的品牌</a></li>
                    <li @if(Request::getRequestUri()=='/admin/brandarticle/pendingaudit')class="active" @endif><a href="/admin/brandarticle/pendingaudit"><i class="fa fa-circle-o"></i> 待审核的品牌</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/pedingbrands')class="active" @endif><a href="/admin/article/pedingbrands"><i class="fa fa-circle-o"></i> 待发布的品牌</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-database"></i> <span>品牌文档操作</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/brandarticle/receive')class="active"@endif><a href="/admin/brandarticle/receive" ><i class="fa fa-circle-o"></i> 品牌文档领取</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/ownbrandarticlereceived')class="active" @endif><a href="/admin/article/ownbrandarticlereceived"><i class="fa fa-circle-o"></i> 我领取的品牌</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/brandreceives')class="active" @endif><a href="/admin/article/brandreceives"><i class="fa fa-circle-o"></i> 领取品牌汇总</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/receivednomod')class="active" @endif><a href="/admin/article/receivednomod"><i class="fa fa-circle-o"></i> 已领取未修改</a></li>
                    <li @if(Request::getRequestUri()=='/admin/article/modednomake')class="active" @endif><a href="/admin/article/modednomake"><i class="fa fa-circle-o"></i> 已领取已修改</a></li>
                  </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-commenting"></i>
                    <span>问答评论管理</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">9</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/ask')class="active"@endif><a href="/admin/ask"><i class="fa fa-circle-o"></i> 问答列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/ask/add')class="active"@endif><a href="/admin/ask/add"><i class="fa fa-circle-o"></i> 添加问题</a></li>
                    <li @if(Request::getRequestUri()=='/admin/ask/pending')class="active"@endif><a href="/admin/ask/pending"><i class="fa fa-circle-o"></i> 待审核问答</a></li>
                    <li @if(Request::getRequestUri()=='/admin/answers')class="active"@endif><a href="/admin/answers"><i class="fa fa-circle-o"></i> 回答列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/answers/pending')class="active"@endif><a href="/admin/answers/pending"><i class="fa fa-circle-o"></i> 待审核回答</a></li>
                    <li @if(Request::getRequestUri()=='/admin/comments')class="active"@endif><a href="/admin/comments"><i class="fa fa-circle-o"></i> 评论列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/comments/pendingaudit')class="active"@endif><a href="/admin/comments/pendingaudit"><i class="fa fa-circle-o"></i> 待审核评论</a></li>
                    <li @if(Request::getRequestUri()=='/admin/commentsreversion')class="active"@endif><a href="/admin/commentsreversion"><i class="fa fa-circle-o"></i> 评论回复列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/commentsreversion/pendingaudit')class="active"@endif><a href="/admin/commentsreversion/pendingaudit"><i class="fa fa-circle-o"></i> 待审核评论回复</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-random"></i> <span>友情链接管理</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/flink')class="active"@endif><a href="/admin/flink"><i class="fa fa-circle-o"></i> 友情链接列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/flink/create')class="active"@endif><a href="/admin/flink/create"><i class="fa fa-circle-o"></i> 添加友情链接</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>杂项功能管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/makesitemap')class="active"@endif><a href="/admin/makesitemap"><i class="fa fa-circle-o"></i> XML地图生成</a></li>
                    <li @if(Request::getRequestUri()=='/admin/phone')class="active"@endif><a href="/admin/phone"><i class="fa fa-circle-o"></i> 电话提交管理</a></li>
                    <li @if(Request::getRequestUri()=='/admin/makemsitemap')class="active"@endif><a href="/admin/makemsitemap"><i class="fa fa-circle-o"></i> 移动端地图生成</a></li>
                    <li @if(Request::getRequestUri()=='/admin/linkresult')class="active"@endif><a href="/admin/linkresult"><i class="fa fa-circle-o"></i> 链接推送结果</a></li>
                    <li @if(Request::getRequestUri()=='/admin/brandtypelist')class="active"@endif><a href="/admin/brandtypelist"><i class="fa fa-circle-o"></i> 品牌类型列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/brandtypecreate')class="active"@endif><a href="/admin/brandtypecreate"><i class="fa fa-circle-o"></i> 品牌类型添加</a></li>
                    <li @if(Request::getRequestUri()=='/admin/importbrands')class="active"@endif><a href="/admin/importbrands"><i class="fa fa-circle-o"></i> 品牌数据导入</a></li>
                    <li @if(Request::getRequestUri()=='/admin/brandlists')class="active"@endif><a href="/admin/brandlists"><i class="fa fa-circle-o"></i> 品牌分类汇总</a></li>
                    <li @if(Request::getRequestUri()=='/admin/investmentcreate')class="active"@endif><a href="/admin/investmentcreate"><i class="fa fa-circle-o"></i> 投资分类添加</a></li>
                    <li @if(Request::getRequestUri()=='/admin/investmentlist')class="active"@endif><a href="/admin/investmentlist"><i class="fa fa-circle-o"></i> 投资分类列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/acreagecreate')class="active"@endif><a href="/admin/acreagecreate"><i class="fa fa-circle-o"></i> 店铺面积添加</a></li>
                    <li @if(Request::getRequestUri()=='/admin/acreagelist')class="active"@endif><a href="/admin/acreagelist"><i class="fa fa-circle-o"></i> 店铺面积列表</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i>
                    <span>系统用户管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/admin/regsiter')class="active"@endif><a href="/admin/admin/regsiter"><i class="fa fa-circle-o"></i> 系统用户添加</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/list')class="active"@endif><a href="/admin/admin/list"><i class="fa fa-circle-o"></i> 系统用户列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/userauth')class="active"@endif><a href="/admin/admin/userauth"><i class="fa fa-circle-o"></i> 文档发布汇总</a></li>
                    <li @if(Request::getRequestUri()=='/admin/admin/article/infos')class="active"@endif><a href="/admin/admin/article/infos"><i class="fa fa-circle-o"></i> 文档发布筛选</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-wechat"></i> <span>违禁词汇管理</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/guarded_keywoeds')class="active"@endif><a href="/admin/guarded_keywoeds"><i class="fa fa-circle-o"></i> 违禁词列表</a></li>
                    <li @if(Request::getRequestUri()=='/admin/guarded_edit_keywoeds')class="active"@endif><a href="/admin/guarded_edit_keywoeds"><i class="fa fa-circle-o"></i> 违禁词修改</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-wrench"></i> <span>系统设置中心</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/sysconfig')class="active"@endif><a href="/admin/sysconfig"><i class="fa fa-circle-o"></i> 站点核心设置</a></li>
                    <li @if(Request::getRequestUri()=='/admin/sysinfo')class="active"@endif><a href="/admin/sysinfo"><i class="fa fa-circle-o"></i> 系统运行信息</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/Atlas">
                    <i class="fa fa-photo"></i> <span>图集内容管理</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-angellist"></i> <span>SEO工具</span>
                    <small class="label pull-right bg-yellow">12</small>
                    <small class="label pull-right bg-green">16</small>
                    <small class="label pull-right bg-red">5</small>
              <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/searchkey')class="active"@endif><a href="/admin/searchkey"><i class="fa fa-circle-o"></i> 相关关键词采集</a></li>
                    <li @if(Request::getRequestUri()=='/admin/webinfo')class="active"@endif><a href="/admin/webinfo"><i class="fa fa-circle-o"></i> 站点信息查询</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>前台会员中心</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li @if(Request::getRequestUri()=='/admin/userlist')class="active"@endif><a href="/admin/userlist"><i class="fa fa-circle-o"></i> 前台用户管理</a></li>
                    <li @if(Request::getRequestUri()=='/admin/useradd')class="active"@endif><a href="/admin/useradd"><i class="fa fa-circle-o"></i> 添加前台用户</a></li>
                    <li @if(Request::getRequestUri()=='/admin/user/charge')class="active"@endif><a href="/admin/user/charge"><i class="fa fa-circle-o"></i> 前台会员充值</a></li>
                    <li @if(Request::getRequestUri()=='/admin/user/charge-history')class="active"@endif><a href="/admin/user/charge-history"><i class="fa fa-circle-o"></i> 会员充值记录</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>功能待开发中</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Level One
                            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                            <li>
                                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                </ul>
            </li>
            <li><a href="https://github.com/HY11053/laravelcms"><i class="fa fa-book"></i> <span>后台使用文档</span></a></li>
            <li class="header">员工考核管理</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>周工作总结</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>待办事项</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>未完成事项</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
