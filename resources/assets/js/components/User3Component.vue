<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User 3</div>

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

            axios.get('api/passport/user',{
                headers: {'Authorization' : 'Bearer NfYNYBlKu4cLDmOB9DTQ1uiEU4a4JrEtsIar40Z1qcvo5U1GO9q0qTDYiowN' , 'HEADER1' : 'VALUE1'}
            }).then( response => {
                this.user = response.data
            }).catch(error => {
                console.log(error)
            })
        }
    }
</script>
