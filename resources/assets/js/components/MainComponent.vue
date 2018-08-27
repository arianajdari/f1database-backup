<template>
	<div id="main">
		<div id="title">
			<h2 id="headName">{{ navbarName }}</h2>
		</div>

		<div id="gadgets_place">
			<component v-bind:is="navbarClicked"></component>
		</div>
	</div>	
</template>

<style type="text/css">
	#main #title #headName{
		margin-left:10px;
	}
</style>

<script>

	import EditProfile from './EditProfile.vue';

	export default {

		data() {
			return {
				
			}
		},

		components: {
			'edit-profile' : EditProfile
		},
		props: {
			navbarClicked : null,
			navbarName : null
		},
		mounted() {
			console.log('Main mounted');
		}
	}
</script>