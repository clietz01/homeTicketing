import { Form } from '@inertiajs/react'

export default () => (
    <Form action="/users" method="post">
        <input type="text" name="name" />
        <input type="email" name="email" />
        <button type="submit">Create User</button>
    </Form>
)