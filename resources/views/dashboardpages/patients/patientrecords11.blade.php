@extends('dashboard')

<head>
    @section('Profile') Paitent Records @endsection
    <style>
        .fixed_header {
            /* width: 400px; */
            width: 100vh;

            table-layout: fixed;
            border-collapse: collapse;
        }

        .fixed_header tbody {
            display: block;
            width: 100%;
            overflow: auto;
            /* height: 100px; */
        }

        .fixed_header thead tr {
            display: block;
        }

        .fixed_header thead {
            background: black;
            color: #fff;
        }

        .fixed_header th,
        .fixed_header td {
            padding: 5px;
            text-align: left;
            width: 200px;
        }
    </style>
</head>

{{-- @section('content') --}}
@section('content')

<table class="fixed_header">
    <thead>
        <tr>
            <th>Col 1</th>
            <th>Col 2</th>
            <th>Col 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
        </tr>
        <tr>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
        </tr>
        <tr>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
        </tr>
        <tr>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
        </tr>
        <tr>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
        </tr>
    </tbody>
</table>
@endsection