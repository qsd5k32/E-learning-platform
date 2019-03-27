@component('mail::message')

    {{ $message }}

@component('mail::button', ['url' => route('courseInfo',['id' => $course_id])])
    Course
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
