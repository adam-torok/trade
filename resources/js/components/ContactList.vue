<template>
    <div class="contacts-list border-l border-gray-200">
        <ul>
            <li
                v-for="(contact) in sortedContacts"
                :key="contact.id"
                @click="selectContact(contact)"
            >
                <div class="avatar">
                    <img
                        class="h-10 w-10 object-cover rounded-full"
                        :class=" { selected: contact == selected  }"
                        :src="'storage/' + contact.profile_image"
                        :alt="contact.first_name"
                    />
                </div>
                <span class="unread" v-if="contact.unread">{{contact.unread}}</span>
                <span class="unread" v-if="contact.unread">{{
                    contact.unread
                }}</span>
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
        },
        data() {
            return {
                selected: this.contacts.length ? this.contacts[0] : null
            };
        },
        methods: {
            selectContact(contact) {
                this.selected = contact;
                this.$emit('selected', contact);
            }
        },
        computed: {
            sortedContacts() {
                return _.sortBy(this.contacts, [(contact) => {
                    if (contact == this.selected) {
                        return Infinity;
                    }
                    return contact.unread;
                }]).reverse();
            }
        }
    }
</script>
<style lang="scss" scoped>
.selected {
    border: 3px solid #ffffff19;
}
.contacts-list {
    flex: 1;
    max-height: 600px;
    overflow: scroll;
    ul {
        list-style-type: none;
        padding-left: 0;
        li {
            padding: 2px;
            position: relative;
            cursor: pointer;
            span.unread {
                background: #82e0a8;
                color: #fff;
                position: absolute;
                right: 11px;
                top: 20px;
                display: flex;
                font-weight: 700;
                min-width: 20px;
                justify-content: center;
                align-items: center;
                line-height: 20px;
                font-size: 12px;
                padding: 0 4px;
                border-radius: 3px;
            }
            .avatar {
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .contact {
                flex: 3;
                font-size: 10px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: center;
                p {
                    margin: 0;
                    &.name {
                        font-weight: bold;
                    }
                }
            }
        }
    }
}
</style>
