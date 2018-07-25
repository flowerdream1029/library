<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>创青春</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1/dist/css/bootstrap.css">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	    .*{
	    	margin:0 auto;
	    	padding: 0;
	    }
		.content_img{
			height:450px;
			width:100%;
		}

		.content_img img{
			height: 450px;
			width:100%;
		}

		.content_img img:not(:first-child){display: none;}

		/*.content {
			height: 400px;
			width: 80%;
			margin-left: auto;
			margin-right: auto;
			margin-top: 10px;          
		}*/

        .content_right {
            border-left: 1px solid #d7e0d9;
        }

		.content_left ul li,.content_right ul li {
			list-style: none;
			padding: 0;
			margin-left: -40px;
			padding-bottom: 5px;
			padding-left: 20px;
		}
        
        a {
        	/*
            必须同时设置color和text-decoration属性;
            否则不会去掉默认设置;
        	*/
        	color: #6d6d6d;
        	text-decoration: none;
        }

        .article_name {
        	color: #fadada;
        	width: 15px;
        	height: 15px;
        	line-height: 15px;
        	text-align: center;
        	display:inline-block;
        	background-color: #b0c1bc;
        }

        h3 {
        	padding-left: 20px;
        }

        .copyright {
            background: #eaf2f1;
            font-size: 13px;
            text-align: center;
            color: #555555;
            padding-top: 28px;
            padding-bottom: 28px;
            border-top: 1px solid #d7e0d9;
        }

        p {
            text-indent: 2em;
        }
	</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
      <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="">
	<div class="navbar navbar-default" role="navigation" style="background-color: #eaf2f1">  　
		<div class="navbar-header">  　 
			<a href="##" class="navbar-brand">保险大课堂</a>  　
		</div>  
		<ul class="nav navbar-nav">  
			<li class="active"><a href="##">首页</a></li>   
			<li><a href="baoxian_teaching.html">保险大课堂</a></li>  
			<li><a href="##">合同透析</a></li>  
			<li><a href="##">法律维权</a></li>
			<li><a href="Agent_credit_list.html">代理信用榜</a></li> 
			<li><a href="##">定制经纪服务</a></li> 
		</ul>  
		<form action="##" class="navbar-form navbar-left" rol="search">  
			<div class="form-group">  
				<input type="text" class="form-control" placeholder="请输入关键词" /> 
			</div>  
			<button type="submit" class="btn btn-default">搜索</button>  
		</form> 
	</div> 
    <div class="content_img" id="img_change">
    	<img src="family.jpg" />
    	<img src="pianbao.jpg" />
    	<img src="baoxianday.jpg" />
    </div>
    <!-- 内容开始 -->
    <div class="container" style="border: 1px solid #d7e0d9">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <!-- 真人真事案例开始 -->
                    <div class="row">
                        <div class="content_left col-md-4">
                            <h3><strong>真人真事(保险案例和案件)</strong></h3>
                            <ul>
                                <li>
                                    <span class="article_name">1</span>
                                    <a href="##" style="text-decoration: none;color: #e0353b" onclick='change("person_one")'>设局害命骗取高额保险赔偿</a>
                                    <div style="display: none;text-indent: 2em" id="event_one">
                                       人寿保险传递的是一份“爱意”，是为了减少伤痛而提供经济上的支援，但如果投保人为了获赔而为亲人投保，且为了保险金而刻意制造保险事故，甚至不惜伤害人命，最终不仅无法获得赔偿，还会害人害己。
                                        <span onclick='document.getElementById("event_one").style.display="none"' style="color: red">收起</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="article_name" >2</span>
                                    <a href="##" onclick='change("person_two")' style="color: #e0353b">篡改检测报告 骗取更高赔付</a>
                                    <div style="display: none;text-indent: 2em" id="event_two">
                                       为了获得更高的赔偿额，被保险人私自篡改伤残报告，这看似聪明的举动，其实已经触犯了法律。大家千万不要去如此“模仿”，以免“偷鸡不成反蚀把米”。
                                        <span onclick='document.getElementById("event_two").style.display="none"' style="color: red">收起</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="article_name">3</span>
                                    <a href="##" onclick='change("person_three")' style="color: #e0353b">焚毁自有车辆骗取赔偿</a>
                                    <div style="display: none;text-indent: 2em" id="event_three">
                                       车损险赔偿范围仅适用于合同规定的车辆损失诱因，投保车损险并不能保证所有造成车辆损失情况都可以获得赔偿。此外，其保险免责条款中明确指出，因被保险人或驾驶人员的故意行为造成的损失不属于保险赔偿范围。
                                        <span onclick='document.getElementById("event_three").style.display="none"' style="color: red">收起</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <!-- 案例的具体内容 -->
                        <div class="content_right col-md-8" style="border-top: 1px solid #d7e0d9">
                            <ul id="event_content_one" style="display: block">
                                <!-- 人物头像以及个人简介-->
                                <li>
                                    <h4><strong>案例回放</strong></h4>
                                    <p>
                                       2013 年5 月，江苏常州发生一起奇怪的命案：身高1.6 米多的廖某在1.45 米的人工湖中溺死了。更奇怪的是，廖某的丈夫李某在事发前不久，刚刚为廖某购买了高额的人身保险，包括2 份意外伤害保险和1 分旅行保险，保额共计450 万元，受益人均为李某。
                                    </p>
                                    <p>
                                       经过警方深入调查发现，原来这一切都是李某为了骗取高额的保险金赔偿设计的“局”。他对廖某并没有什么感情可言，“没有正当职业、听话、贪财、爱慕虚荣”是李某看中廖某的关键，婚后第一时间，李某就匆匆忙忙为廖某购买人身保险，并将受益人从法定继承人改为他一人，然后就实施了杀人计划。
                                    </p>
                                    <p>
                                        李某叫来了同乡周某“勾引”廖某，约她到当地一人工湖幽会，并故意将电动车开入湖中。不想由于湖水太浅，并没能很好地“创造”一场意外。于是，周某只好将廖某的头强行按进水中，致其死亡。
                                    </p>
                                    <p>
                                        最终，这一看似设计巧妙的犯罪行为并没能逃脱法律的制裁。被告人李某被判犯有故意杀人罪，判处死刑立即执行；周某犯故意杀人罪，判处死刑，缓期两年执行。
                                    </p>
                                </li>
                                <li>
                                    <h4><strong>拍案说法</strong></h4>
                                    <p>
                                       李某为了得到高额的保险金赔偿，诱骗廖某与其结婚，当获得合法夫妻名份时，将自己作为唯一受益人为廖某投保，随后再残忍地将其杀害。可以说，整个设计谋害的过程是极其残忍、恶意的，但同时，也折射出李某、周某对保险、对法律的无知。
                                    </p>
                                    <p>
                                        实际上，李某原本的设想就有很大问题，他的行为已经触犯了保险法的规定，同时也不符合保险合同条款。
                                    </p>
                                    <p>
                                        在我国《保险法》中有明确规定，首先，以死亡为给付保险金条件的合同，未经被保险人同意并认可保险金额的，合同无效。本案中，李某为廖某投保并没有征得她本人的同意，包括受益人的二次修改，也并非出自廖某本人之手，因此，这份保险合同从开始就是无效的。
                                    </p>
                                    <p>
                                        而之所以《保险法》会有如此规定，正是为了防止同类道德风险的产生。保险传递的是一份“爱意”，是为了减少伤痛而提供经济上的支援，但如果本末倒置，为了获赔、为了保险金而刻意制造保险事故，甚至不惜伤害人命，最终不仅无法获得赔偿，还会害人害己。
                                    </p>
                                    <p>
                                        另一方面，从保险合同角度考虑，一旦确认被保险人的身故是投保人故意为之，是绝对不可能获得经济补偿的。在所有人身保险的免赔责任中，都将“主观故意”排在首位，条款都会写明：“投保人对被保险人的故意杀害、故意伤害”的情况属于免赔责任。
                                    </p>
                                </li>                   
                            </ul>
                            <ul id="event_content_two" style="display: none">
                                <!-- 人物头像以及个人简介-->
                                <li>
                                    <h4><strong>案例回放</strong></h4>
                                    <p>
                                       王某是个生意人，在生意场上，得失往往在一瞬之间。可能正是受事业的影响，他的风险防范意识特别强。2012 年11 月15 日至2013 年1 月16 日期间，王某以其本人或者妻子薛某为投保人，先后向6 家保险公司投保人身意外伤害险，购买了9 分保单，保额共计人民币570 万元。不想，到了2013 年2 月17 日，意外真的发生了。王某在出租房内因一氧化碳中毒昏迷被送至医院抢救，所幸命是保住了，可听力受损严重。之后，他向6 家保险公司报案，并分别从2 家保险公司获赔意外伤害医疗费和住院津贴费共计11000 元。
                                    </p>
                                    <p>
                                       2013 年8 月5 日，王某到宁波市医疗中心医院再次进行听力检测。经检测，他只达到了七级伤残标准，距离他认为的“五级伤残”标准差了不少。为了多拿一些保险金，使检测结果达到司法鉴定的伤残要求和理赔标准，王某采用Photoshop 软件修改检测报告。之后，宁波市某司法鉴定中心依据错误的检测报告出具了“ 损伤程度已构成五级伤残”的司法鉴定意见。拿着这份报告，王某向6 家保险公司申请意外残疾理赔，以期获得人民币74 万元。
                                    </p>
                                    <p>
                                        不过，就在王某满心期待之时，保险公司经过理赔调查发现检测数据报告十分可疑，于是报警。最终，王某被认定犯有保险诈骗罪，判处有期徒刑6 年，并处罚金人民币5万元。
                                    </p>
                                </li>
                                <li>
                                    <h4><strong>拍案说法</strong></h4>
                                    <p>
                                        用“偷鸡不成蚀把米”来形容王某或许正合适，只不过，为了骗得多一些保险金而要入狱6 年的代价太过惨痛了点。
                                    </p>
                                    <p>
                                       本案中，王某是个富有保险意识的人，他为自己和妻子投保人身意外保险的行为并无不当，这种风险意识值得我们借鉴。但是王某在事故发生后夸大损伤程度，想以此获得更高额的保险赔偿就不那么明智了。就是这一闪而过的邪念，让他付出了意想不到的代价。
                                    </p>
                                    <p>
                                        王某篡改检测报告的目的是为了达到“五级”伤残标准。据了解，我国的伤残标准可分为十级，最重的为第一级，最轻的为第十级，与人身保险伤残程度等级相对应的保险金给付比例分为十档，伤残程度第一级对应的保险金给付比例为100%，伤残程度第十级对应的保险金给付比例为10%，每级相差10%。
                                    </p>
                                    <p>
                                        从案例中推测，如果五级伤残可获得74 万元赔偿，那么低两级（即七级伤残）所能获得的赔偿金额为近50 万元，两者相差了24 万元。当然，这并不是一笔小数目，可为了这24 万元入狱6 年，怎么想都是不值得的。
                                    </p>
                                </li>                   
                            </ul>
                            <ul id="event_content_three" style="display: none">
                                <!-- 人物头像以及个人简介-->
                                <li>
                                    <h4><strong>案例回放</strong></h4>
                                    <p>
                                        2010 年1 月26 日，沈某以48 万元购得二手车S350 奔驰轿车1 台。同年1 月28 日，沈某在某保险公司投保，办理了包含车辆损失险142.5 万元在内的保险业务。2 月22 日，沈某驾驶该车行驶至新宾县红升水库岭上道路时，使车燃烧并烧毁报废，并于4 月29 日向保险公司索赔97.19 万元保险金。
                                    </p>
                                    <p>
                                        最终，被告人沈某因犯保险诈骗罪，被判处有期徒刑5 年，并处罚金人民币10 万元，于判决生效后强制缴纳。
                                    </p>
                                </li>
                                <li>
                                    <h4><strong>拍案说法</strong></h4>
                                    <p>
                                        “车辆损失险”是汽车商业险的基本险种之一。在保险期间，如被保险人或其允许的合法驾驶人在使用保险车辆过程中，因合同规定的原因造成保险车辆的损失，可由保险人按照合同规定负责赔偿。在实际理赔过程中，车辆损失险赔偿范围适用于5 种情况，一是车辆发生碰撞、倾覆；二是车辆发生火灾、爆炸；三是外界物体倒塌或坠落、保险车辆行驶中平行坠落造成车辆损失；四是车辆遭遇雷击、暴风、龙卷风、暴雨、洪水、海啸、地陷、冰陷、崖崩、雪崩、雹灾、泥石流、滑坡等自然灾害；四是在车辆有驾驶人随船照料的情况下，载运保险车辆的渡船遭受以上自然灾害造成车辆损失。
                                    </p>
                                    <p>
                                        在这起案件中，沈某的车辆属于车损险虽包含于“车辆发生火灾、爆炸”的理赔范围，但该火灾属于沈某人为故意纵火，符合车损险中的有关免责条款，即被保险人或驾驶人员的故意行为造成的损失，保险公司可不予理赔，且进行追责。此外，根据车损险投保规定，车损险的保险金额可以按投保时的保险价值或实际价值确定，也可以由投保人与保险公司协商确定，但保险金额不能超出保险价值，即价值10 万元的车辆，保险金额只能在10 万元以内。一般保险合同也多会在赔偿处理条款中规定，机动车发生全车损失时，计算赔偿不得超过车辆的实际价值。沈某以48万元购得的二手车理应按48 万元计算保险金额。其购入的142.5 万元车损险属于超额投保，即使车辆遭遇的是可理赔的自然火灾，其提出的97.19 万元赔偿要求也不会得到全额支持。
                                    </p>
                                </li>                   
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--底部状态栏-->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    Copyright&copy合肥至诚保险信息服务有限公司
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	    var img=document.getElementById('img_change').getElementsByTagName("img");
	    var num=0;
	    var len=img.length;

	    setInterval(function(){
	        img[num].style.display="none";
	        num=++num==len?0:num;
	        img[num].style.display="inline-block";
	    },3000);//切换时间
        
       function change(id){
            var person_one=document.getElementById("event_content_one");
            var person_two=document.getElementById("event_content_two");
            var person_three=document.getElementById("event_content_three");
            if(id=="person_one")
            {
                person_one.style.display="block";
                person_two.style.display="none";
                person_three.style.display="none";
            }
            else if(id=="person_two")
            {
                person_one.style.display="none";
                person_two.style.display="block";
                person_three.style.display="none";
            }
            else if(id=="person_three")
            {
                person_one.style.display="none";
                person_two.style.display="none";
                person_three.style.display="block";
            }
            else if(id=="person_four")
            {
                person_one.style.display="none";
                person_two.style.display="none";
                person_three.style.display="none";
            }
        }

    </script>
</body>
</html>