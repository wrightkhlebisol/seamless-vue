@extends('layouts.app')

@section('content')
	<div class="container mx-auto my-10 w-500 shadow-2xl rounded-lg">
		<div class="py-6 px-4 flex justify-between bg-white rounded-t-lg">
			<div>Internia</div>
			<div>
				<div class="flex">
					<div class="mx-5">Calendar</div>
					<div class="mx-5">Statistic</div>
					<div class="mx-5">Employee</div>
					<div class="mx-5">Client</div>
					<div class="mx-5">Equipment</div>
				</div>
			</div>
			<div class="float-right">Profile</div>
		</div>

		<div class="flex bg-gray-300 rounded-b-lg">
			<div class="px-5 w-1/3">
				<h2 class="my-5">employee</h2>
				<div class="flex flex-col bg-white px-5 shadow-2xl rounded-lg">
					<h3>All Employees</h3>

					<h5>PROJECT</h5>

					<div class="rounded-md">Arena Sport</div>
					<div class="rounded-md">Arena Sport</div>
					<div class="rounded-md">Arena Sport</div>
					<div class="rounded-md">Arena Sport</div>
					<div class="rounded-md">Arena Sport</div>
					<div class="rounded-md">Arena Sport</div>

                        <button type="submit" class="br-5 py-2 bg-purple-500 rounded-full -bottom-2">add project</button>
				</div>
			</div>
			<div class="px-5 w-2/3">
                <div class="flex justify-end">
                <button type="submit" class="br-5 py-2 px-4 bg-green-500 rounded-full my-5">add employee</button>
                </div>

                <user-table></user-table>
			</div>
		</div>
	</div>
@endsection
