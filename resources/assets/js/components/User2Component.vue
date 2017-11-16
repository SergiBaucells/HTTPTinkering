<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User 2. Auth error</div>

                    <div class="panel-body">
                        {{ user.name }} || {{ user.email }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                user : {}
            }
        },

        mounted() {
            console.log('Component mounted.')

            axios.get('api/user').then( response => {
                this.user = response.data
            }).catch(error => {
                console.log(error)
            })
        }
    }
</script>
