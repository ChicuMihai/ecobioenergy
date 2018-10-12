@extends('admin.layouts.app')

@section('title', 'Carousel')

@section('content')

 <div class="project-list">
    <table class="table table-hover">
        @foreach($slides as $slide)
        <tr>
        <td class="project-title"><a href="">Slide {{$slide->id}}</a></td>
            <td class="project-actions">  
            
            <form action="{{route('carousel.destroy',$slide->id)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <a href="{{route('carousel.edit',$slide->id)}}" class="btn btn-info "><i class="fa fa-paste"></i> Edit</a>
            <button type="submit" class="btn btn-danger"><i class="fa fa-folder"></i> Delete </a>
            </form>
            </td>
        </tr>
        @endforeach
        
    </table>
    </div> 
@endsection
