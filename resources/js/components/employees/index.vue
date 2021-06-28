<template>
<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employees</h1>
    </div>
    
    <div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="card mx-auto">
                <div>
                    <div class="alert alert-success">
                    </div>
                </div>  
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-row align-item-center">
                                    <div class="col">
                                        <input type="text" name="search" class="form-control mb-2" placeholder="Search"/>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary mb-2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                    <div>
                        <router-link :to="{name: 'EmployeesCreate'}" class="btn btn-primary mb-2">Create</router-link>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">UserName</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="float-right"><button type="button" class="btn btn-secondary">Edit</button></a></td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</template>

<script>

export default {
  
    
}
</script>


<style scoped>

</style>