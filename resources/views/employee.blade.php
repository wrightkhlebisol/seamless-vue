@extends('layouts.app')

@section('content')
	<div class="container mx-auto my-48 shadow-2xl rounded-lg text-gray-700">
		<div class="py-6 px-4 flex justify-between bg-white rounded-t-lg">
			<div>
				<img src="{{asset('img/internia-logo.png')}}" class="inline mx-5 rounded-full h-16 w-16 items-center justify-center"/>
				<p class="inline font-bold text-4xl">Internia</p>
			</div>
			<div class="flex text-2xl mt-2 font-medium text-gray-600">
				<div class="mx-3">Calendar</div>
				<div class="mx-3">Statistic</div>
				<div class="mx-3">Employee</div>
				<div class="mx-3">Client</div>
				<div class="mx-3">Equipment</div>
			</div>
			<div class="float-right">
				<div class="flex">
					<p  class="mx-5 mt-2 text-3xl">
						<i class="far fa-bell"></i>
					</p>
					<p  class="mx-5 mt-2 text-3xl">
						<i class="far fa-envelope"></i>
					</p>
					<img
                        src="https://i.pravatar.cc/50?u=xf"
                        class="inline mx-5 rounded-full h-16 w-16 items-center justify-center"
                    />
				</div>
			</div>
		</div>

		<div class="flex bg-gray-300 rounded-b-lg">
			<div class="pl-5 w-1/3">
				<h2 class="my-5 text-4xl font-bold mx-10">employee</h2>
				<div class="flex flex-col bg-white ml-5 p-10 shadow-2xl sticky rounded-lg text-xl font-bold">
					<h3>
						<img
                        src="{{ asset('img/internia-logo-circle.png') }}"
                        class="inline mr-5 rounded-full h-16 w-16 items-center justify-center"
                    />All Employees</h3>

					<h5 class="text-gray-500 text-xl mt-10">PROJECT</h5>

					<div class="rounded-md py-5"><img src="https://placeimg.com/30/30/any" class="rounded-full h-12 w-12 items-center justify-center inline"> Arena Sport</div>
						
					<div class="rounded-md px-5 py-3 bg-gray-300 br-5"><img src="https://placeimg.com/30/30/tech" class="rounded-full h-12 w-12 items-center justify-center inline"> Arena Sport</div>					

					<div class="rounded-md py-5"><img src="https://placeimg.com/30/30/arch" class="rounded-full h-12 w-12 items-center justify-center inline"> Arena Sport</div>	
								
					<div class="rounded-md py-5"><img src="https://placeimg.com/30/30/nature" class="rounded-full h-12 w-12 items-center justify-center inline"> Arena Sport</div>				
                        <button type="submit" class="br-5 py-2 px-5 bg-purple-500 absolute rounded-full bottom-0">add project</button>
				</div>
			</div>
			<employee-manager></employee-manager>
		</div>
	</div>
@endsection
