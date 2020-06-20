<template>
	<div id="app"  class="container">
		<div id="title">
			<h1>Vue + Laravel SPA</h1>
		</div>
		<div id="nav">
			<router-link v-bind:to="`/userpage/${login}`" class="link">My page</router-link>
			<router-link to="/ex" class="link">Example</router-link>
		</div>
		<div id="content">
			<router-view></router-view>
		</div>
	</div>
</template>

<script type="text/javascript">
	export default{
		props: ['login'],
		data: function(){
			return{
				
			}
		}
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
}
</style>