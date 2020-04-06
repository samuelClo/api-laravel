<template>
    <div>
        <AddTask v-if="task" @newTask="editTask" :olderText="task.description"  />
    </div>
</template>
<script>
    import Task from "../components/Task";
    import AddTask from "../components/AddTask";

    import axios from 'axios';

    export default {
        name: 'Edit',
        data() {
            return {
                task: null,
            }
        },
        mounted(){
            this.getTask()
        },
        methods: {
            getTask() {
                const taskId = this.$route.params.id;

                axios.get('/api/tasks/' + taskId)
                .then(rel=> {
                    this.task = rel.data
                })
                .catch(err => alert(err))
            },
            editTask(text) {
                axios.put('/api/tasks/' + this.task.id, { description: text })
                .then(rel=> {
                    alert(`Votre tache ${this.task.id} a bien été modifié`)
                    this.$router.replace({"name": "home"})
                })
                .catch(err => alert(err))

            },
        },
        components: {
            Task,
            AddTask,
        }
    }
</script>
