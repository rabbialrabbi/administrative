<template>
    <div>
        <div class="form-group" :class="{ 'form-group--error': $v.name.$error }">
            <label class="form__label">Name</label>
            <input class="form__input" v-model.trim="$v.name.$model"/>
        </div>
        <div class="error" v-if="!$v.name.required">Field is required</div>
        <div class="error" v-if="!$v.name.minLength">Name must have at least {{$v.name.$params.minLength.min}} letters.</div>
        <div class="form-group" :class="{ 'form-group--error': $v.age.$error }">
            <label class="form__label">Age</label>
            <input class="form__input" v-model.trim.lazy="$v.age.$model"/>
        </div>
        <div class="error" v-if="!$v.age.between">Must be between {{$v.age.$params.between}} and {{$v.age.$params.between}}</div><span tabindex="0">Blur to see changes</span>
    </div>
</template>

<script>
    import { required, minLength, between } from 'vuelidate/lib/validators'
    export default {
        name: "TestComponent",
        data() {
            return {
                name: '',
                age: 0
            }
        },
        validations: {
            name: {
                required,
                minLength: minLength(4)
            },
            age: {
                between: between(20, 30)
            }
        }
    }
</script>

<style scoped>

</style>
