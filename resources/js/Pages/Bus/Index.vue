<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, usePage } from '@inertiajs/vue3';

const page=usePage();
const bus=page.props.Bus;
</script>

<template>
    <Head title="Buses"/>

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2
                    class="text-xl font-semibold leading-tight text-gray-800"
                >
                    Buses
                </h2>
                <Link :href="route('Bus.FormularioBus')">
                Agregar Bus
                </Link >
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                                                <div className="relative overflow-x-auto">
                        <table className="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" className="px-6 py-3">
                                Placa
                                </th>
                                <th scope="col" className="px-6 py-3">
                                Marca
                                </th>
                                <th scope="col" className="px-6 py-3">
                                Modelo
                                </th>
                                <th scope="col" className="px-6 py-3">
                                Capacidad
                                </th>
                                <th scope="col" className="px-6 py-3">
                                Acciones
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr v-for="bus in bus" :key="bus.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ bus.placa }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ bus.Marca }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ bus.Modelo }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ bus.Capacidad }}
                                    </td>
                                    <td class="px-6 py-4">
                                        //aciones
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
