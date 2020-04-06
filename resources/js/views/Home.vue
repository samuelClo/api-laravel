<template>
    <div>
        <AddTask @newTask="newTask"/>

        <ul v-if="Object.keys(tasks).length > 0">
            <li v-for="task in tasks" :key="task.id">
               <Task
                :description="task.description"
                :id="task.id"

                @deleteTask="deleteTask"
                @editTask="editTask"
                />
            </li>
        </ul>

    </div>
</template>
<script>
    import Task from "../components/Task";
    import AddTask from "../components/AddTask";

    import axios from 'axios';

    export default {
        name: 'Home',
        data() {
            return {
                tasks: [],
            }
        },
        mounted(){
            this.addTasks()
        },
        methods:{
            newTask(description) {

                axios.post('/api/tasks', {description})
                    .then(rel=> {
                        alert('Bien ajouté')
                        this.addTasks()
                    })
                    .catch(err => alert(err))
            },
            addTasks() {
                axios.get('/api/tasks')
                    .then(rel=> this.tasks = rel.data)
            },
            deleteTask(id) {
                axios.delete('/api/tasks/' + id)
                .then(rel=> {
                    alert(`delete task ${id}`)
                    this.addTasks()
                })
                .catch(err => alert(err))
            },
            editTask(id) {
                console.log(id)
            },
        },
        components: {
            Task,
            AddTask,
        }
    }
</script>
