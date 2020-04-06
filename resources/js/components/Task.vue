<template>
    <div id="task">
        <p> {{ description }} </p>

        <button @click="deleteTask(id)">delete</button>
        <router-link :to="{ name: 'edit', params: { id } }">edit</router-link>
     </div>
</template>

<style>

</style>

<script>
    export default {
        name: 'Task',
        props: ['description', 'id'],
        methods: {
            deleteTask(id) {
                console.log(id)
                this.$emit('deleteTask', id)
            },
            editTask(id) {
                this.$emit('deleteTask', id)
            }
        }
    }
</script>
