<template>
	<div id="comp">
		<h3>{{name}}</h3>
		<img src="storage/1.jpg" width="30%">
		<form method="POST" v-on:submit.prevent="upload" id="formelem">
			<input type="file" name="userfile">
			<br>
			<input type="submit" name=""  class="btn btn-outline-dark" value="Загрузить фото">
		</form>
	</div>
</template>

<script type="text/javascript">

	export default{
		data: function(){
			return{
				

			}
		},
		methods: {
			add: function(){
				alert('hi')
			},
			upload: function(){
				let form = new FormData(formelem)
				axios
				.post('/upfile', form)
				.then( function(){
					console.log('success')
					window.location.reload()
				})
				.catch(error => console.log(error))
			}
		},
		props:['name']
		
	}
</script>

<style type="text/css">
	#formelem{
		max-width: 50%;
	}
</style>