<template>
    <form @submit.prevent="newTask">
        <label v-if="olderText" for="text">Modifier la tache :</label>
        <label v-else for="text">Créer une nouvelle tache :</label>

        <input v-model="text" id="text" placeholder="text..." type="text">
        <input type="submit" :value="this.olderText ? 'modifier' : 'Créer'"/>
    </form>
</template>

<style scoped>
    form {
        margin-bottom: 20px;
    }
</style>

<script>
    export default {
        name: 'AddTask',
        data: function() {
            return {
                text: this.olderText ? this.olderText : '',
            }
        },
        props: ['olderText'],
        methods: {
            newTask() {
                const text = this.text.trim()

                if (!text) {
                    alert('Une tache ne peut etre vide')
                    return
                }

                this.$emit('newTask', text )
            },
        }
    }
</script>
