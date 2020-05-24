layui.use(['layer'],function(){
	layer = layui.layer;
});

// 登录
function login(){
	layer.open({
		type: 2,
		title: '登录',
		shade: 0.3,
		area: ['400px', '350px'],
		content: '/portal/account/login'
	});
}