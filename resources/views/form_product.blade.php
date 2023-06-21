@extends('template')
@section('content')
    
<form action="{{$action}}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
            <tr>
                <td>POTO</td>
                <td><input type="file" name="poto" id="poto" value="{{$product->poto}}"></td>
            </tr>
            <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama_barang" id="nama_barang" value="{{ $product->nama_barang }}"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" id="harga" value="{{ $product->harga }}"></td>
        </tr>
        <tr>
            <td>DESKRIPSI</td>
            <td><input type="text" name="deskripsi" id="deskripsi" value="{{ $product->deskripsi}}"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="SIMPAN">
                
            </td>
        </tr>
    </table>
</form>
 @endsection