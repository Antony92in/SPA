<template>
	<div id="main">
		<div v-for="item in posts" v-bind:key="item.id">
			<p class="titles">{{item.title}}</p>
		</div>
		<div v-for="item in posts" v-bind:key="item.content">
			<p class="cont">{{item.content}}</p>
		</div>
	</div>	
</template>

<script type="text/javascript">
	export default{
		data: function(){
			return{
				
				posts: ''
				
			}
		},
		mounted(){
			axios
			.get('/posts')
			.then(response => (this.posts = response.data))
			.catch(error => (console.log(error)))
		}
	}
</script>

<style type="text/css">
	#main{
		

	}

	.titles{
		display: subgrid;
		width: 30%;
		background-color: red;
	

	}

	.cont{
		display: subgrid;
	}

</style>