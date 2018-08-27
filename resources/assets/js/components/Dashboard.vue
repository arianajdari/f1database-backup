<template>
    <div>

        <div id="nav-navbar">
            <navbar 
                @linkClicked="linkClicked" 
                v-bind:user-id="userId"
                v-bind:user-name="userName"
                v-bind:user-email="userEmail"
                v-bind:user-image-filename="userImageFilename"
            >                
            </navbar>
        </div>

        <div id="nav-main">
            <main-component  v-bind:navbar-name="name" v-bind:navbar-clicked="clicked"></main-component>
        </div>

    </div>   
</template>

<script>
    import JQuery from 'jquery';
    import Navbar from './Navbar.vue';
    import MainComponent from './MainComponent.vue';
    let $ = JQuery;

    export default {
        data() {
            return {
                clicked : null,
                name : 'Dashboard',
            }
        },
        props: {
            userId : null,
            userName : null,
            userEmail : null,
            userImageFilename : null
        },
        methods: {
            linkClicked(e) {
                this.name = e;
                this.clicked = this.fixName(e);
            },

            fixName(name) {
                return name.replace(" ", "-").toLowerCase();
            }
        },
        components: {
            'navbar' : Navbar,
            'main-component' : MainComponent
        },
        mounted() {

            console.log('Dashboard mounted.');
            
            var mainWidth = $(window).width() - 260;
            var mainMinHeight = $(window).height();

            $("#list").css('height', $(window).height());

            $("#main").css({
                'width' : mainWidth + 'px',
                'margin-left' : 260 + 'px',
                'min-height' : mainMinHeight + 'px'
            });

            $(window).resize(function() {
                mainWidth = $(window).width() - 260;
                
                $("#navbar").height($(window).height());
                $("navbar #photo").css('height', $(window).height());
                $("#list").css('height', $(window).height());
                $("#main").css('height', $(window).height());
            });

            $("#navbar #photo").css({
                'width' : 260 + 'px',
                'height' : mainMinHeight
            });

            $('.choice').click(function() {
                $(this).find('.sub-list').toggle();
                if ($(this).find('.pull-right').hasClass('fa-angle-down')) {
                    $(this).find('.pull-right').removeClass('fa-angle-down').addClass('fa-angle-up');
                } else {
                    $(this).find('.pull-right').removeClass('fa-angle-up').addClass('fa-angle-down');
                }
            });

            if ($(window).width() < 1315) {
                    $('#main').css('margin-left', 0);
                    
            } else {
                    $("#main").css('width', mainWidth + 'px');
            }

            var left = -230;

            $("#navbar #burger").click(function() {
                if (left == -230) {
                    $("#navbar").css('left', '0px');
                    left = 0;
                } else {
                    $("#navbar").css('left', '-230px');
                    left = -230;
                }
            });
           
        }
    }
</script>
