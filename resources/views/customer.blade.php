



<table>
    <tr class="">
        <th class="">顧客予約内容</th>
    </tr>  
    <tr>
        <td>名前</td>
        <td>{{ $customerDetail->name }}</td>
    </tr>
    <tr>
        <td>電話番号</td>
        <td>{{ $customerDetail->phoneNumber }}</td>
    </tr>
    <tr>
        <td>メール</td>
        <td>{{ $customerDetail->mail }}</td>
    </tr>
    <tr>
        <td>予約日</td>
        <td>{{ $customerDetail->calendar }}</td>
    </tr>
    <tr>
        <td>予約時間帯</td>
        <td>{{ $customerDetail->times }}</td>
    </tr>
</table>

