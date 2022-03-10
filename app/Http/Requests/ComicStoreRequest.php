<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:50',
            'thumb' => 'nullable|url|max:255',
            'price' => 'required|numeric',
            'series' => 'required|min:5|max:50',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|min:5|max:20',
        ];
    }
    public function messages(){
        return[
            'title.required' => 'Il titolo è obbligatorio',  
            'title.min' => 'Il titolo deve essere di alemeno 3 caratteri',  
            'title.max' => 'Il titolo deve essere di massimo 50 caratteri',  
            'description.required' => 'La descrizione è obbligatoria',  
            'description.min' => 'La descrizione deve essere di alemeno 50 caratteri',  
            'thumb.url' => 'L\'immagine della copertina deve essere composto da massimo 255 caratteri',
            'thumb.max' => 'L\'url dell\'immagine della copertina deve essere fornita tramite un indirizzo(url)',
            'price.required' => 'Il prezzo è obbligatorio',  
            'price.min' => 'Il prezzo deve essere fornito in formato  numerico',  
            'series.required' => 'Deve essere indicata la serie di appartenenza del fumetto',  
            'series.min' => 'La serie di appartenenza del fumetto deve avere un nome di almeno 5 caratteri',  
            'series.max' => 'La serie di appartenenza del fumetto deve avere un nome di massimo 50 caratteri',  
            'sale_date.required' => 'La data di inizio vendita è obbligatoria',  
            'sale_date.date_format' => 'La data di inizio vendita deve essere formattata come: AAAA-mese-giorno',  
            'type.required' => 'Deve essere indicato il tipo di fumetto (solitamente comics bboks o graphic novel)',  
            'type.min' => 'La specifica del tipo deve essere di almeno 5 caratteri',  
            'type.max' => 'La specifica del tipo deve essere di massimo 20 caratteri',  
        ];
    }
}
