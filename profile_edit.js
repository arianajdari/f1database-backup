let elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir(mix => {
	mix.sass('./resources/assets/sass/app.scss')
		.webpack('../resources/assets/js/app.js');
			
});

