<template>
    <div>
        <h1>Home</h1>

        <p>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>

        <ul>
            <li v-for="task in tasks" :key="task.id">
                {{ task.description }}
            </li>
        </ul>

    </div>
</template>
<script>
    export default {
        name: 'Home',
        data() {
            return {
                tasks: [],
            }
        },
        mounted(){
            fetch('http://127.0.0.1:8000/api/user')
            .then(rel => rel.json())
            .then(rel=> this.tasks = rel)
        },
    }
</script>
