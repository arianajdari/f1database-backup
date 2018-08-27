<template>

<div id="navbar">
    <div id="placeholder">
        
        <div id="top">
            <div class="container">
                <img src="images/senna.jpg" alt="profile_picture">
                <p>{{ userName }}</p>
                <div id="burger"><i class="fas fa-external-link-alt"></i></div>
            </div>
        </div>

        <div id="list">
            <ul>

                <li class="choice">
                    <i class="far fa-user"></i> 
                    <p>User Profile</p> 
                    <div style="float: right;width:10px;height: 10px;padding-right: 20px;">
                        <i class="fas fa-angle-down pull-right"></i>
                    </div>

                    <ul class="sub-list">
                        <li v-on:click="linkClicked" class="links">Edit Profile</li>
                        <li v-on:click="linkClicked" class="links">Logout</li>
                    </ul>
                </li>

                <li class="choice">
                    <i class="far fa-user"></i>
                    <p>Project</p> 
                    <div style="float: right;width:10px;height: 10px;padding-right: 20px;">
                        <i class="fas fa-angle-down pull-right"></i>
                    </div>

                    <ul class="sub-list">
                        <li v-on:click="linkClicked" class="links">Contributors</li>
                        <li v-on:click="linkClicked" class="links">My Edits</li>
                        <li v-on:click="linkClicked" class="links">Log Files</li>
                    </ul>
                </li>

                <li class="choice">
                    <i class="far fa-user"></i> 
                    <p>Tasks</p> 
                    <div style="float: right;width:10px;height: 10px;padding-right: 20px;">
                        <i class="fas fa-angle-down pull-right"></i>
                    </div>

                    <ul class="sub-list">
                        <li v-on:click="linkClicked" class="links">View Tasks</li>
                        <li v-on:click="linkClicked" class="links">Create a Task</li>
                        <li v-on:click="linkClicked" class="links">Edit a Task</li>
                    </ul>
                </li>

                <li class="choice">
                    <i class="far fa-user"></i> 
                    <p>Entities</p>
                    <div style="float: right;width:10px;height: 10px;padding-right: 20px;">
                        <i class="fas fa-angle-down pull-right"></i>
                    </div>

                    <ul class="sub-list">
                        <li v-on:click="linkClicked" class="links">View Entities</li>
                        <li v-on:click="linkClicked" class="links">Create an Entity</li>
                        <li v-on:click="linkClicked" class="links">Edit an Entity</li>
                    </ul>
                </li>

                <li class="choice">
                    <i class="far fa-times-circle"></i> 
                    <p>Issues</p> 
                    <div style="float: right;width:10px;height: 10px;padding-right: 20px;">
                        <i class="fas fa-angle-down pull-right"></i>
                    </div>                              

                    <ul class="sub-list">                        
                        <li v-on:click="linkClicked" class="links">View Issues</li>
                        <li v-on:click="linkClicked" class="links">Create an Issue</li>
                    </ul>
                </li>


                <li class="choice">
                    <i class="far fa-user"></i> 
                    <p>About</p>
                    <div style="float: right;width:10px;height: 10px;padding-right: 20px;">
                        <i class="fas fa-angle-down pull-right"></i>
                    </div>
                    <ul class="sub-list">
                        <li v-on:click="linkClicked" class="links">Database</li>
                        <li v-on:click="linkClicked" class="links">Vision</li>
                        <li v-on:click="linkClicked" class="links">This Project</li>
                    </ul>
                </li>

                <li></li>
            </ul>
        </div>        
    </div>

    <div id="photo"></div>
        
</div>
    
</template>

<script>

    export default {

        methods: {
            linkClicked : function(event) {
                this.$emit('linkClicked', $(event.target)[0].innerText);
            }
        },
        data() {
            return {
               
            }
        },
        props: {
            userId : null,
            userName : null,
            userEmail : null,
            userImageFilename : null
        },
        
        mounted() {
            console.log('Navbar mounted.');
        }
    }
</script>
