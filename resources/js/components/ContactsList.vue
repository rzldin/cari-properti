<template>
    <div class="contacts-list">
        <ul>
            <li v-for="contact in contacts" :key="contact.id">
                <div class="avatar3">
                    <img :src="contact.photo" :alt="contact.name" />
                </div>
                <div class="contact-user">
                    <p class="name">{{ contact.name }}</p>
                    <p class="email">{{ contact.email }}</p>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        contacts: {
            type: Array,
            default: []
        }
    }
};
</script>
