import React, {useState} from "react";
import confetti from "canvas-confetti";

const QuoteForm = () => {

  const [loading, setLoading] = useState(false)

  const [success, setSuccess] = useState(false)

  const [username, setUsername] = useState('')

  const [form, setForm] = useState({
    name: "",
    email: "",
    phone: "",
    message: ""
  })

  const [errors, setErrors] = useState()

  const handleFormInput = (e) => {
    setForm({
      ...form,
      [e.target.name]: e.target.value
    })
  }


  const submitForm = async (e) => {
    e.preventDefault()
    setErrors({})
    setLoading(true)
    setUsername(form.name)

    try {
      await axios.post('/api/send', {...form})
      await setSuccess(true)
      setForm({
        name: "",
        email: "",
        phone: "",
        message: ""
      })

      confetti({
        particleCount: 200,
        spread: 120,
        origin: { y: 0.6 }
      });

    } catch (e) {
      setErrors({
        ...e.response.data.errors
      })
    }
    setLoading(false)
  }

  return (
    <div className={`lg:w-1/2 md:w-2/3 mx-auto`}>
      {success && (
        <div
          className="relative p-5 mb-4 mx-2 border border-green-500 bg-green-50 bg-green-500 rounded-md text-white shadow-lg shadow-green-500/30">
          <button onClick={() => setSuccess(false)} type="button" className={`absolute right-1 flex items-center justify-center top-1 h-8 w-8 rounded-md border border-white/30 text-white`}>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5"
                 stroke="currentColor" className="w-5 h-5">
              <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>

          Hi, <span className={`font-semibold`}>{username}</span>. <br/>
          We have received your email and will come back to you as soon as possible.
        </div>
      )}
      <div className={`w-full flex flex-wrap`}>
        <div className={`p-2 w-full md:w-1/2`}>
          <div className="relative">
            <label htmlFor="name" className={`leading-7 text-sm text-gray-600 font-semibold`}>Name</label>
            <input type="text" id="name"
                   value={form.name}
                   name="name"
                   onChange={handleFormInput}
                   className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.name ? 'border-rose-700' : 'border-gray-300'}`}/>
            {errors?.name && (
              <span className={`py-2 text-sm text-rose-700 block`}>{errors.name[0]}</span>
            )}
          </div>
        </div>
        <div className={`p-2 w-full md:w-1/2`}>
          <div className="relative">
            <label htmlFor="email" className={`leading-7 text-sm text-gray-600 font-semibold`}>Email</label>
            <input type="text" id="email"
                   name="email"
                   value={form.email}
                   onChange={handleFormInput}
                   className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.email ? 'border-rose-700' : 'border-gray-300'}`}/>
            {errors?.email && (
              <span className={`py-2 text-sm text-rose-700 block`}>{errors.email[0]}</span>
            )}
          </div>
        </div>

        <div className={`w-full p-2 relative`}>
          <label htmlFor="phone" className={`leading-7 text-sm text-gray-600 font-semibold`}>Phone</label>
          <input type="tel" id="phone" name="phone"
                 onChange={handleFormInput}
                 value={form.phone}
                 className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.phone ? 'border-rose-700' : 'border-gray-300'}`}/>
          {errors?.phone && (
            <span className={`py-2 text-sm text-rose-700 block`}>{errors.phone[0]}</span>
          )}
        </div>

        <div className={`w-full p-2 relative`}>
          <label htmlFor="message" className={`leading-7 text-sm text-gray-600 font-semibold`}>Message</label>
          <textarea name="message" id="message" cols="30" rows="6"
                    onChange={handleFormInput}
                    value={form.message}
                    className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.message ? 'border-rose-700' : 'border-gray-300'}`}></textarea>

          {errors?.message && (
            <span className={`py-2 text-sm text-rose-700 block`}>{errors.message[0]}</span>
          )}

        </div>

        <div className={`p-2 w-full`}>
          <button disabled={loading} type="submit" onClick={submitForm}
                  className={`relative flex mx-auto text-white bg-primary-500 border-0 py-2 px-8 focus:outline-2 focus:outline-primary-500 focus:outline-offset-2 hover:bg-primary-600 disabled:text-primary-500	rounded text-lg disabled:bg-primary-50`}>

            <span className={`relative`}>
              SUBMIT
            </span>

            {loading && (
              <svg className="absolute w-4 h-4 text-primary-500 top-[14px] left-3 animate-spin"
                   xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle className="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" strokeWidth="4"></circle>
                <path className="opacity-75" fill="currentColor"
                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
              </svg>)
            }
          </button>
        </div>
      </div>
    </div>
  )

}

export default QuoteForm
