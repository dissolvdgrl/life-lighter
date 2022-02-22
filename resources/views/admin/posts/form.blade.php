@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'maxlength' => 200,
        'required' => true
    ])

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 200,
        'required' => true,
        'note' => 'Use this for a simple description of the post. Also used for SEO purposes.'
    ])

    @formField('input', [
        'name' => 'author',
        'label' => 'Author',
        'maxlength' => 100
    ])

    @formField('tags', [
        'label' => 'Tags'
    ])

    @formField('wysiwyg', [
        'name' => 'content',
        'label' => 'Content',
        'toolbarOptions' => [
        ['header' => [2, 3, 4, 5, 6, false]],
        'bold',
        'italic',
        'underline',
        'strike',
        ["script" => "super"],
        ["script" => "sub"],
        "blockquote",
        "code-block",
        ['list' => 'ordered'],
        ['list' => 'bullet'],
        ['indent' => '-1'],
        ['indent' => '+1'],
        ["align" => []],
        ["direction" => "rtl"],
        'link',
        "clean",
        ],
        'placeholder' => 'Post content goes here',
        'maxlength' => 3000,
        'editSource' => false,
    ])

    @formField('medias', [
        'name' => 'featured_image',
        'label' => 'Featured Image'
    ])
    
@stop
