<template>
    <div>
        <h3>
            Projects
        </h3>    
        <button @click="createProject()">Create Project</button>
        <ul>
            <li
                class="border-blue-800 border-l-4 bg-blue-100 px-2"
                v-for="(project,projectKey) in projects" :key="projectKey">
                <button class="text-red-400 bg-white px-1 m-1" @click="deleteProject(projectKey)">X</button>
                <button class="text-yellow-400 bg-white px-1 m-1" @click="editProject(projectKey)">E</button>
                {{ project.title }}    
            </li>    
        </ul> 
    </div>
</template>
<script>
export default {
    data: () => {
        return {
            projects: []
        }
    },
    created() {
        this.getProjects()
    },
    methods:{
        getProjects() {
            axios.get('http://127.0.0.1:8000/api/project')
            .then(response => {
                this.projects = response.data
            }).catch(response=>{
                console.log(response)
                alert('Error')
            })
        },
        deleteProject(projectKey) {
            axios.delete('http://127.0.0.1:8000/api/project/' + this.projects[projectKey].id)
            .then(response => {
                alert('Project Deleted!')
                this.projects.splice(projectKey,1)
            }).catch(response=>{
                console.log(response)
                alert('Error')
            })

        },
        createProject() {
            let project = prompt('Write Your Project')
            axios.post('http://127.0.0.1:8000/api/project',{title: project} )
            .then(response => {
                alert('Project Saved!') 
                this.projects.push(response.data.project)
            }).catch(response=>{
                console.log(response)
                alert('Error')
            })
        },
        editProject(projectKey) {
            let projectDB = this.projects[projectKey];
            let project = prompt('Write Your Project',projectDB.title) 
            axios.put('http://127.0.0.1:8000/api/project/'+ projectDB.id,{title: project} )
            .then(response => {
                alert('Project Saved!') 
                this.projects[projectKey].title = project
            }).catch(response=>{
                console.log(response)
                alert('Error')
            })
        }
    }

}
</script>