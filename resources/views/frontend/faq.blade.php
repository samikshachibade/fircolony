@extends('layouts.frontend')
@section('frontend')
<div>
    <x-frontend.header :title="__('faq.faq_page_title')"
    :subtitle="__('faq.faq_page_subtitle')" />

@livewire('faq')
</div>
@endsection