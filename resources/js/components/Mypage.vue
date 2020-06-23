<template>
	<div id="comp">
		<div class="left">
			<img v-bind:src="`/storage/${pic}.jpg`" id="picture" v-if="seen" v-on:click="trig">
			<form method="POST" v-on:submit.prevent="upload" id="formelem">
				<input type="file" name="userfile" id="userfile" placeholder="file" accept="image/jpeg,image/png,image/gif">
				<br>
				<input type="submit" name=""  class="btn btn-outline-dark" value="Загрузить фото">
			</form>
		</div>
		<div class="right">
			<input type="submit" name="" class="btn btn-light" value="Add post" v-on:click="show = !show">
			<transition name="fade">
				<div id="postarea" v-if="show">
					<form id="postform" method="POST" v-on:submit.prevent="store">
						<input type="text" name="title" class="form-control" placeholder="title">
						<textarea name="content" class="form-control" rows="10"></textarea>
						<input type="submit" name="" value="Send" class="btn btn-light">
					</form>
				</div>
			</transition>
		</div>
	</div>
</template>

<script type="text/javascript" src="../mypage.js">
</script>

<style type="text/css">
#comp{
	display: grid;
	grid-template-areas: 'l r';
	grid-template-columns: 30% 70%;
	grid-gap: 5px;
	grid-template-rows: auto;
}
.left{
	grid-area: l;
	
}

.right{
	grid-area: r;

}

#picture{
	max-width: 100%;
}

#postarea{
	text-align: right;
	padding: 10px;
}

.fade-enter-active, .fade-leave-active {
	transition: opacity 1s;
}
.fade-enter, .fade-leave-to {
	opacity: 0;
}

#userfile{
	display: none;
}
</style>