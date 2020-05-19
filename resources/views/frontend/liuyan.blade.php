<!--我要留言 开始-->
<div class="gbook" id="msg">
    <div class="hd">用户留言<span class="gb_tips">（如果您对该项目感兴趣，请留言立即获得最新加盟资料！）</span></div>
    <div class="bd">
        <div class="bd_mag">
            <form class="message_form" onsubmit="return false">
                {{csrf_field()}}
                <ul>
                    @if(isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
                        <input type="hidden" name="project_id" id="project_id" value="{{$thisarticlebrandinfos->id}}">
                        <input type="hidden" name="cid" id="cid" value="{{$thisbrandtypecidinfo->id}}">
                        <input type="hidden" name="title"  id="fm_title" value="{{$thisarticlebrandinfos->brandname}}">
                        <input type="hidden" name="cla" id="cla" value="{{$thisbrandtypeinfo->typename}}">
                        <input type="hidden" name="combrand" id="combrand" value="{{$thisarticlebrandinfos->brandname}}">
                    @elseif(isset($thisarticleinfos) && !empty($thisarticleinfos->brandname))
                        <input type="hidden" name="project_id"  id="project_id" value="{{$thisarticleinfos->id}}">
                        <input type="hidden" name="cid" id="cid" value="{{$thisbrandtypecidinfo->id}}">
                        <input type="hidden" name="title" id="fm_title" value="{{$thisarticleinfos->brandname}}">
                        <input type="hidden" name="cla" id="cla" value="{{$thisbrandtypeinfo->typename}}">
                        <input type="hidden" name="combrand" id="combrand" value="{{$thisarticleinfos->brandname}}">
                    @else
                        <input type="hidden" name="title" id="fm_title"  value="未知分类">
                        <input type="hidden" name="cla"  id="cla" value="未知分类">
                        <input type="hidden" name="combrand"  id="combrand"  value="未知分类">
                    @endif
                    <li> <span class="txt"><i>*</i>姓名</span>
                        <input name="username" id="sub_name" value="" class="input_bk" placeholder="您的真实姓名" type="text">
                    </li>
                    <li><span class="txt"><i>*</i>手机</span>
                        <input class="input_bk" name="iphone" id="sub_iphone" placeholder="电话是与您联系的重要方式" type="text">
                    </li>
                    <li><span class="txt"><i>*</i>金额</span>
                        <select name="jine" class="select_money">
                            <option value="0">请选择金额</option>
                            <option value="1">1-5万</option>
                            <option value="2">5-10万</option>
                            <option value="3">10-15万</option>
                            <option value="4">15-30万</option>
                            <option value="5">30-50万</option>
                            <option value="6">50-100万</option>
                            <option value="7">100万以上</option>
                        </select>
                    </li>
                    <li> <span class="txt"><i>*</i>留言</span>
                        <textarea id="content" name="content" class="textarea_bk" placeholder="请输入您的留言内容或选择快捷留言"></textarea>
                        <div class="check_msg">
                            <div class="check_msg_tit"><i>◆</i>您可以根据下列意向，快捷留言</div>
                            <div class="check_msg_bd">
                                <ul>
                                    <li><a href="javascript:;" class="no" target="_self">我有意向，请问加盟费是多少？</a></li>
                                    <li><a href="javascript:;" class="no" target="_self">很想合作，来电话细谈吧。</a></li>
                                    <li><a href="javascript:;" class="no" target="_self">请问具体的加盟流程是怎样的？</a></li>
                                    <li><a href="javascript:;" class="no" target="_self">请问贵公司哪里有样板店或直营店？</a></li>
                                    <li><a href="javascript:;" class="no" target="_self">请给我打电话并寄送加盟资料。</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li> <span class="txt">&nbsp;</span>
                        <input value="提交-立即获得最新加盟资料" id="sub_btn" class="btn" type="submit">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<!--我要留言 结束-->