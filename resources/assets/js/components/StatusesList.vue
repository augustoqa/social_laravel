<template>
    <div>
        <div class="card mb-3 border-0" v-for="status in statuses">
            <div class="card-body d-flex flex-column shadow-sm">
                <div class="d-flex align-items-center mb-3">
                    <img width="40px" src="avatar.png" class="rounded mr-3 shadow-sm" alt="Usuario Genérico">
                    <div>
                        <h5 class="mb-1">César Acual</h5>
                        <div class="small text-muted">Hace una hora</div>
                    </div>
                </div>
                <p class="card-text text-secondary" v-text="status.body"></p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            statuses: []
        }
    },
    mounted() {
        axios.get('/statuses')
            .then(res => {
                this.statuses = res.data.data
            })
            .catch(err => {
                console.log(err.response.data)
            })

        EventBus.$on('status-created', status => {
            this.statuses.unshift(status)
        })
    }
}
</script>

<style scoped>

</style>
