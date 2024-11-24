<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const initialValues = {
    placa: "",
    Marca: "",
    Modelo: "",
    Capacidad: 0
}
const form = useForm(initialValues)

const submit=(e)=>{
    form.post(route('Bus.store'))
    e.preventDefault()
    console.log('no recargo la pagina')
}
</script>


<template>

    <Head title="Formulario de Buses" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Formulario Buses
                </h2>
                <Link :href="route('Bus.index')">
                Lista de Buses
                </Link>
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-center bg-white overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <form class=" w-1/3 py-5 space-y-3" @submit="submit">
                        <div>
                            <InputLabel for="placa" value="Placa" />

                            <TextInput id="placa" type="text" class="mt-1 block w-full" v-model="form.placa" required
                                autofocus autocomplete="placa" placeholder="AAA-123" />

                            <InputError class="mt-2" :message="form.errors.placa" />
                        </div>
                        <div>
                            <InputLabel for="Marca" value="Marca" />

                            <TextInput id="Marca" type="text" class="mt-1 block w-full" v-model="form.Marca" required
                                autofocus autocomplete="Marca" placeholder="Mercedes" />

                            <InputError class="mt-2" :message="form.errors.Marca" />
                        </div>
                        <div>
                            <InputLabel for="Modelo" value="Modelo" />

                            <TextInput id="Modelo" type="text" class="mt-1 block w-full" v-model="form.Modelo" required
                                autofocus autocomplete="Modelo" placeholder="Benz" />

                            <InputError class="mt-2" :message="form.errors.Modelo" />
                        </div>
                        <div>
                            <InputLabel for="Capacidad" value="Capacidad" />

                            <TextInput id="Capacidad" type="number" class="mt-1 block w-full" v-model="form.Capacidad" required
                                autofocus autocomplete="Capacidad" placeholder="50" min="0"/>

                            <InputError class="mt-2" :message="form.errors.Capacidad" />
                        </div>
                        <PrimaryButton class="flex justify-center">
                            Registrar Bus
                        </PrimaryButton>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
