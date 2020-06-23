<template>
	<div id="app"  class="container">
		<div id="title">
			<h1>Vue + Laravel SPA</h1>
		</div>
		<div id="nav">
			<router-link to="/userpage" class="link">My page</router-link>
			<router-link to="/posts" class="link">Posts</router-link>
			<router-link to="/weather" class="link">Weather</router-link>
			<a href="#">Comunity</a>
		</div>
		<div id="content">
			<keep-alive>
			<router-view></router-view>
		    </keep-alive>
		</div>
</div>
</template>

<script type="text/javascript">
	export default{
		props: ['userid'],
		data: function(){
			return{
				
			}
		},

	}
</script>

<style type="text/css">


#title{
	font-family: 'Quicksand', sans-serif;
	text-align: center;
}

#nav{
	font-size: 20px;

}

.link{
	margin-right: 20px;
}
#content{
	margin-top: 20px;
	background-color: #e3f0fc;
	border-radius: 10px;
	padding: 20px;
	height: 700px;
	overflow: hidden;
}
</style>