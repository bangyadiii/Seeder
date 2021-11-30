@extends('layout.main-layout')
@include('components.header')

        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        @foreach ($results as $item)
                        <tbody>
                            <tr>
                                <td><a href="{{route('profile', $item->username)}}">{{$item->username}}</a></td>
                                <td><a href="{{route('profile', $item->username)}}">{{$item->name}}</a></td>
                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>


