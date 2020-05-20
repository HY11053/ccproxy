function getCookie(c_name)
{
	if (document.cookie.length>0)
	{
		c_start=document.cookie.indexOf(c_name + "=")
		if (c_start!=-1)
		{
			c_start=c_start + c_name.length+1 
			c_end=document.cookie.indexOf(";",c_start)
			if (c_end==-1) c_end=document.cookie.length
			return unescape(document.cookie.substring(c_start,c_end))
		} 
	}
	return ""
}

function setCookie(c_name,value,expiredays)
{
	var exdate=new Date()
	exdate.setDate(exdate.getDate()+expiredays)
	document.cookie=c_name+ "=" +escape(value)+	((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}

function searchUrl()
{
	window.location.href='http://'+location.hostname+'/ccproxy/search/'+document.getElementById("get_keywords").value;
}
function searchUrl2()
{
	window.location.href='http://'+location.hostname+'/ccproxy/search/'+document.getElementById("get_keywords2").value;
}
function searchFocus(obj)
{
	if(obj.value==obj.defaultValue) obj.value=''; 
}
function searchHover(obj)
{
	if(obj.value=='') obj.value=obj.defaultValue;
}
function cHeight()
{
	e=document.getElementById("content");
	if(e.offsetHeight<754){
		e.style.height=754 +"px";
	}
}
function showsubmenu(sid)
{
	for (i = 1; i <= 100; i ++)
	{
		if(document.getElementById("menuTitle" + i))
		{
			//eval("menuTitle" + i + ".className=\"selected-menu-entry\";");
			//eval("faqanswer" + i + ".className=\"wiki-right-hide\";");
			document.getElementById("menuTitle" + i).className = "selected-menu-entry";
			document.getElementById("faqanswer" + i).className = "wiki-right-hide";
		}
		else
			break;
	}

	// eval("menuTitle" + sid + ".className=\"wiki-class\";");
	document.getElementById("menuTitle" + sid).className = "wiki-class";
	// eval("faqanswer" + sid + ".className=\"wiki-right\";");
	document.getElementById("faqanswer" + sid).className = "wiki-right";
	setCookie("faq_selected_menu", sid, 365);
}
function showsubmenu_ex()
{
	id = getCookie("faq_selected_menu");
	if (id == null || id== "")
		id = 1;
	showsubmenu(id);
}
function init_pay()
{
	id = getCookie("pay_useCompanyName");
	if(id == null || id == "" || id == "0")
	{
		document.getElementById("useCompanyName").style.display="none";
		document.getElementById("checkEndUsername0").checked=true;
		document.getElementById("checkEndUsername1").checked=false;
	}
	else
	{
		document.getElementById("useCompanyName").style.display="table-row";
		document.getElementById("checkEndUsername0").checked=false;
		document.getElementById("checkEndUsername1").checked=true;
	}

	id = getCookie("pay_payCreditCard");
	if(id == null || id == "" || id == "0")
		document.getElementById("payCreditCard").style.display="none";
	else
	{
		document.getElementById("payCreditCard").style.display="block";
		document.getElementById("paymentMethod_cc").selected = "selected";
	}

	if(id == null || id == "")
	{
		document.getElementById("payCreditCard").style.display="block";
		document.getElementById("paymentMethod_cc").selected = "selected";
	}
	id = getCookie("pay_payPaypal");
	if(id == null || id == "" || id == "0")
		document.getElementById("payPaypal").style.display="none";
	else
	{
		document.getElementById("payPaypal").style.display="block";
		document.getElementById("paymentMethod_paypal").selected = "selected";
	}

	id = getCookie("pay_ccName");
	if(id == null || id == "" || id == "0")
		document.getElementById("ccName").style.display="none";
	else
	{
		document.getElementById("ccName").style.display="block";
		document.getElementById("checkCCName").checked = true;
	}
}

//indexpicgundong

function gundong(obj,juli,speed){
var firsta=$(obj).children(":first");
var lasta=$(obj).children(":last");
var gsa=$(obj).children(":first").find("td").length;
var csa=0;
var ma;
var kuan;
$(obj).bind({
			mouseenter:function(){
				clearInterval(ma);
				lasta.css("display","block");
				},
			mouseleave:function(){
				ma=setInterval(gundong,speed);
				lasta.css("display","none");
				}
			});
ma=setInterval(gundong,speed);
function gundong(){
	csa++;
	if(csa>(gsa-1))
	csa=0;
	kuan=-(csajuli);
	firsta.animate({
				  "left":kuan
				  })
	}
lasta.children(":first").click(function(){
										csa--;
										if(csa<0)
										csa=(gsa-1);
										kuan=-(csajuli);
										firsta.animate({"left":kuan})
										});
lasta.children(":last").click(function(){
										csa++;
										if(csa>(gsa-1))
										csa=0;
										kuan=-(csajuli);
										firsta.animate({"left":kuan})
										});
}

//print

function preview(oper)
{
if (oper < 10){
bdhtml=window.document.body.innerHTML;
sprnstr="<!--startprint"+oper+"-->";
eprnstr="<!--endprint"+oper+"-->";
prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); 

prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));
window.document.body.innerHTML=prnhtml;
window.print();
window.document.body.innerHTML=bdhtml;
} else {
window.print();
}
}